create table tbl_suggest(
  num int(11) not null auto_increment,
  id char(30) null,
  nick_name char(30) null,
  title char(100) null,
  content text null,
  regist_day char(30) null,
  hit int default 0,
  comment_count int default 0,
  like_count int(11) default 0,
  like_id text null,
  candidate char(100) null,
  primary key(num)
) default charset=utf8;
