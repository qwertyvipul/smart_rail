--remove all comments before executing
--DATABASE MODEL
--user_info -> ui
--station_info -> si
--map_info -> mi
--ann_info -> ann


--details of the users
create table user_info(
	user_id int auto_increment,
	user_name varchar(255) unique,
	full_name varchar(255),
	mobile_no bigint unique,
	email_id varchar(255) unique,
	password varchar(255),
	primary key(user_id)
);


--details of the station
create table station_info(
	station_id int auto_increment,
	station_name varchar(255),
	station_code varchar(255) unique,
	primary key(station_id)
);


--station has announcements
create table ann_info(
	ann_id int auto_increment,
	station_id int,
	date_time timestamp,
	title varchar(255),
	content varchar(511),
	expiry timestamp,
	primary key(ann_id)
);


--station has maps
create table map_info( --incomplete
	map_id int auto_increment,
	station_id int,
	primary key(map_id)
);


--details of the train
create table train_info(
	train_no int,
	train_name varchar(255),
	start_point int,
	end_point int,
	primary key(train_no)
);


--train follows a route
create table train_route(
	route_id int auto_increment,
	train_no int,
	station_id int,
	arrival varchar(255),
	departure varchar(255),
	halt_time int,
	distance_covered int,
	journey_day int,
	primary key(route_id)
);


create table journey_info(
	journey_id int auto_increment,
	train_no int,
	date varchar(255), 
	status int default 0,
	primary key(journey_id)
);


create table journey_route(
	journey_route int auto_increment,
	journey_id int,
	route_id int,
	arrival varchar(255),
	departure varchar(255),
	journey_day int,
	primary key(journey_route)
);


--station has enquiries
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


--enquiry has answers
create table enquiry_answers(
	answer_id int auto_increment,
	enquiry_id int,
	user_id int,
	answer varchar(255),
	date_time timestamp,
	primary key(answer_id)
);


--answers can be voted
create table enquiry_answer_votes(
	vote_id int auto_increment,
	answer_id int,
	user_id int,
	vote int,
	primary key(vote_id)
);


--answers will have comments
create table enquiry_answer_comments(
	comment_id int auto_increment,
	answer_id int,
	user_id int,
	comment varchar(255),
	date_time timestamp,
	primary key(comment_id)
);


--forum
create table forum_questions(
	question_id int auto_increment,
	user_id int,
	title varchar(255),
	content varchar(511),
	date_time timestamp,
	official_reply varchar(255),
	primary key(question_id)
);


--forum has answers
create table forum_answers(
	answer_id int auto_increment,
	question_id int,
	user_id int,
	answer varchar(255),
	date_time timestamp,
	primary key(answer_id)
);


--answers can be voted
create table forum_answer_votes(
	vote_id int auto_increment,
	answer_id int,
	user_id int,
	vote int,
	primary key(vote_id)
);


--answers will have comments
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


------------------------ADMIN PANEL------------------------
--Announcements admin
create table ann_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);

--Enquiry admin
create table enq_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);

create table rpf_admin(

);

--SAFAI ADMIN
create table safai_admin(
	admin_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	station_id int,
	primary key (admin_id)
);

create table tte_info(
	tte_id int auto_increment,
	user_name varchar(255),
	full_name varchar(255),
	password varchar(255),
	primary key(tte_id)
);


create table pantry_info(
	pantry_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	primary key(pantry_id)
);


create table train_medic(
	medic_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	primary key(medic_id)
);

create table train_safai(
	safai_id int auto_increment,
	user_name varchar(255),
	password varchar(255),
	primary key(safai_id)
);

------------------------------STAFFS--------------------------
create table safai_workers(
	worker_id int auto_increment,
	full_name varchar(255),
	user_name varchar(255) unique,
	password varchar(255),
	station_id int,
	primary key(worker_id)
);





-----------------------------ROUND-1-----------------------------
--user tells her pnr no.
create table pnr_info(
	pnr_no int,
	user_id int,
	journey_id int,
	coach_no varchar(255),
	seat_no int,
	start_point int,
	end_point int,
	status int default 0,
	primary key(pnr_no)
);


create table home_to_station(
	----------------
);


create table user_notifications(
	notification_id int auto_increment,
	user_id int,
	link varchar(511) default 'notifications.php',
	title varchar(255),
	content varchar(255),
	date_time timestamp,
	read_code int default 0,
	primary key(notification_id)
);
