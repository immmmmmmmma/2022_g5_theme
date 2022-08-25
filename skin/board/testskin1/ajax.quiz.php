<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/common.lib.php');

$mode = $_POST['mode'];

if ($mode == 'chkpt') {
	checkPoint($member);
} else if ($mode == 'chkans') {
	checkAnswer($member);
}

function checkAnswer($member) {
	$return = new StdClass();
	$mb_id = $_POST['mb_id'];
	$q_ans = $_POST['q_ans'];
	$wr_id = $_POST['wr_id'];
	$bo_table = $_POST['bo_table'];

	$sql = "SELECT wr_2, wr_3, wr_4 FROM g5_write_{$bo_table} WHERE wr_id = {$wr_id};";
	$row = sql_fetch($sql);

	if ($member['mb_id'] != $mb_id) {
		$return->result = 'F';
		$return->msg = '비정상 접근//'.$member['mb_id'].'//'.$mb_id;
	}

	if ($row['wr_4'] == 'C') {
		$return->result = 'F';
		$return->msg = '마감된 퀴즈입니다.';
	}

	if ($q_ans != $row['wr_2']) {
		$return->result = 'F';
		$return->msg = '정답이 아닙니다.';
	}

	if ($return->result == 'F') {
		echo json_encode($return);
		return;
	}

	if ($q_ans == $row['wr_2']) {
		$pt = (int) $row['wr_3'];
		$sql = "UPDATE g5_write_{$bo_table} SET wr_4 = 'C' WHERE wr_id = {$wr_id};";
		$sqlresult = sql_query($sql);

		if ($sqlresult) {
			$result = insert_point($mb_id, $pt, '퀴즈 정답 포인트');
		} else {
			$result = false;
		}

		if ($result) {
			$return->result = 'S';
			$return->msg = '축하합니다. 정답입니다.';
		} else {
			$return->result = 'F';
			$return->msg = '오류가 발생했습니다.';
		}
	}

	echo json_encode($return);
	return true;
}

function checkPoint($member) {
	$return = new StdClass();
	$mb_id = $_POST['mb_id'];
	$pt = $_POST['pt'];

	if ($member['mb_id'] != $mb_id) {
		$return->result = 'F';
		$return->msg = '비정상 접근';
	}

	if ((int) $pt < 50) {
		$return->result = 'F';
		$return->msg = '비정상 접근';
	}

	if ((int) $member['mb_point'] < (int) $pt) {
		$return->result = 'F';
		$return->msg = '포인트가 부족합니다.';
	}

	if ($return->result == 'F') {
		echo json_encode($return);
		return;
	}

	$result = insert_point($mb_id, ($pt * -1), '퀴즈 게시판 문제 등록');

	if ($result) {
		$return->result = 'S';
		$return->msg = '포인트 사용 성공';
	} else {
		$return->result = 'F';
		$return->msg = '오류가 발생했습니다.';
	}

	echo json_encode($return);
	return true;
}
?>