<?php
	$host="localhost";
	$user="root";
	$password="";

	$conn=mysqli_connect($host,$user,$password);
	if($conn){
		//echo "connection successfully!!!<br>";
	}else{
		echo "connection error".mysqli_error($conn);
	}

	$q1="use project";
	$r1=mysqli_query($conn,$q1);
	if(empty($r1)){
		//echo "database is not exist!!!<br>";

		//================create database=================
		$q2="create database project";
		mysqli_query($conn,$q2);
		if(mysqli_query($conn,$q1)){
			//echo "database changed!<br>";
		}
		
	}else{
		//echo "database is exist!!<br>";
	}

	//============create user table======================
	$q3="select * from user";
	$r3=mysqli_query($conn,$q3);
	if(empty($r3)){
		//echo "user table does not exist!!<br>";
		$q4="create table user(user_id int(10) auto_increment,user_name char(30),sc_number char(8),password char(15),role char(20),email char(30),birth_date DATE,primary key(user_id))";
		
		if(mysqli_query($conn,$q4)){
			//echo "user table is created!!!!<br>";
			$s1="insert into user(user_name,password,role,email,birth_date) values('admin1','admin1123','administrator','admin1@gmail.com','1964-5-23')";
			$s2="insert into user(user_name,password,role,email,birth_date) values('admin1','admin2123','administrator','admin2@gmail.com','1977-7-3')";
			$s3="insert into user(user_name,password,role,email,birth_date) values('admin3','admin3123','administrator','admin3@gmail.com','1988-1-2')";
			$s4="insert into user(user_name,password,role,email,birth_date) values('admin4','admin4123','administrator','admin4@gmail.com','1985-10-30')";
			$s5="insert into user(user_name,password,role,email,birth_date) values('admin5','admin5123','administrator','admin5@gmail.com','1975-2-3')";
			mysqli_query($conn,$s1);
			mysqli_query($conn,$s2);
			mysqli_query($conn,$s3);
			mysqli_query($conn,$s4);
			mysqli_query($conn,$s5);
		}else{
			echo "error".mysqli_error($conn);
		}
		
	}else{
		//echo "user table is exist!!!<br>";
	}

	//====================create question table================================================
	$q5="select * from question";
	$r5=mysqli_query($conn,$q5);
	if(empty($r5)){
		//echo "question table does not exist!!<br>";
		$q6="create table question(q_id int(100) auto_increment primary key, user_id int(10),category char(30),question varchar(500),submit_date DATE,submit_time char(12), num_views int(50),num_reply int(50))";
		
		if(mysqli_query($conn,$q6)){
			//echo "question table is created!!!!<br>";
		}else{
			echo "error".mysqli_error($conn);
		}
		
	}else{
		//echo "question table is exist!!!<br>";
	}

	//=====================create reply table==========================================

	$q7="select * from reply";
	$r7=mysqli_query($conn,$q7);
	if(empty($r7)){
		//echo "reply table does not exist!!<br>";
		$q8="create table reply(reply_id int(100) auto_increment primary key,q_id int(100),reply varchar(500),user_id int(100),submit_date DATE,time char(12))";
		
		if(mysqli_query($conn,$q8)){
			//echo "reply table is created!!!!<br>";
		}else{
			echo "error".mysqli_error($conn);
		}
		
	}else{
		//echo "reply table is exist!!!<br>";
	}

	
	
	//=============create usageinfo table===========================
	$q9="select * from usageinfo";
	$r9=mysqli_query($conn,$q9);
	if(empty($r9)){
		//echo "usageinfo table does not exist!!<br>";
		$q10="create table usageinfo(usage_id int(100) auto_increment primary key,user_id int(100),login DATE,login_time char(10),logout_time char(10))";
		
		if(mysqli_query($conn,$q10)){
			//echo "usageinfo table is created!!!!<br>";
		}else{
			echo "error".mysqli_error($conn);
		}
		
	}else{
		//echo "usageinfo table is exist!!!<br>";
	}

?>