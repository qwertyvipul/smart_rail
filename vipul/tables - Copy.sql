
create table user_info(
	user_id int auto_increment,
	user_name varchar(255) unique,
	full_name varchar(255),
	mobile_no bigint unique,
	email_id varchar(255) unique,
	password varchar(255),
	primary key(user_id)
);



create table station_info(
	station_id int auto_increment,
	station_name varchar(255),
	station_code varchar(255) unique,
	primary key(station_id)
);



create table ann_info(
	ann_id int auto_increment,
	station_id int,
	date_time timestamp,
	title varchar(255),
	content varchar(511),
	expiry timestamp,
	primary key(ann_id)
);




create table train_info(
	train_no int,
	train_name varchar(255),
	primary key(train_no)
);



create table train_route(
	route_id int auto_increment,
	train_no int,
	current_id int,
	next_id int,
	in_time timestamp,
	out_time timestamp,
	primary key(route_id)
);



create table enquiry_questions(
	enquiry_id int auto_increment,
	station_id int,
	user_id int,
	title varchar(255),
	content varchar(511),
	official_reply varchar(256) default null,
	date_time timestamp,
	primary key(enquiry_id)
);



create table enquiry_answers(
	answer_id int auto_increment,
	enquiry_id int,
	user_id int,
	answer varchar(255),
	date_time timestamp,
	primary key(answer_id)
);



create table enquiry_answer_votes(
	vote_id int auto_increment,
	answer_id int,
	user_id int,
	vote int,
	primary key(vote_id)
);



create table enquiry_answer_comments(
	comment_id int auto_increment,
	answer_id int,
	user_id int,
	comment varchar(255),
	date_time timestamp,
	primary key(comment_id)
);



create table forum_questions(
	question_id int auto_increment,
	user_id int,
	title varchar(255),
	content varchar(511),
	date_time timestamp,
	official_reply varchar(255),
	primary key(question_id)
);



create table forum_answers(
	answer_id int auto_increment,
	question_id int,
	user_id int,
	answer varchar(255),
	date_time timestamp,
	primary key(answer_id)
);



create table forum_answer_votes(
	vote_id int auto_increment,
	answer_id int,
	user_id int,
	vote int,
	primary key(vote_id)
);



create table forum_answer_comments(
	comment_id int auto_increment,
	answer_id int,
	user_id int,
	comment varchar(255),
	date_time timestamp,
	primary key(comment_id)
);


create table user_experience(
	exp_id int auto_increment,
	user_id int,
	start varchar(255),
	finish varchar(255),
	description varchar(511),
	date_time timestamp,
	upvote int default 0,
	primary key(exp_id)
);


create table safai_request(
	request_id int auto_increment,
	user_id int,
	station_id int,
	latitude varchar(255),
	longitude varchar(255),
	file_name varchar(255),
	content varchar(511),
	status varchar(255) default null,
	final int default 0,
	date_time timestamp,
	primary key(request_id)
);


create table ann_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);


create table enq_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);


create table safai_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);

create table tte_admin(
	tte_id int auto_increment,
	user_name varchar(255),
	full_name varchar(255),
	password varchar(255),
	primary key(tte_id)
);


create table safai_workers(
	worker_id int auto_increment,
	full_name varchar(255),
	user_name varchar(255) unique,
	password varchar(255),
	station_id int,
	primary key(worker_id)
);

