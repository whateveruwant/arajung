create table tbl_comment(
  num int(11) not null auto_increment,
  parent_num int default 0,
  nick_name char(30) null,
  content text null,
  regist_day char(30) null,
  level char(30) null,
  primary key(num)
) default charset=utf8;
