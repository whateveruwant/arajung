create table member(
  num int(11) not null auto_increment,
  id char(30) null,
  password char(30) null,
  nick_name char(30) null,
  level char(30) null,
  regist_day char(30) null,
  age char(30) null,
  education char(30) null,
  carrer text null,
  one_word text null,
  location char(30) null,
  goal char(30) null,
  image char(100) null,
  primary key(num)
) default charset=utf8;


insert into member values (NULL, 'admin', '1234', '관리자', 'admin', '2018-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
insert into member values (NULL, 'user', '1234', '사용자1', 'user', '2018-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
insert into member values (NULL, 'user2', '1234', '사용자2', 'user', '2018-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
insert into member values (NULL, 'candidate1', '1234', '후보자1', 'candidate', '2018-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
insert into member values (NULL, 'candidate2', '1234', '후보자2', 'candidate', '2018-04-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
