create table if not exists users(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;


	
INSERT INTO users (id, username, password, email, created_at, updated_at) VALUES
(1, 'admin', 'temporal', 'admin@gmail.com', '2013-06-07 08:13:28', '2013-06-07 08:13:28'),
(2, 'roger', 'temporal', 'rogelio.vargas.marquez@gmail.com', '2013-06-07 08:14:49', '2013-06-07 08:14:49');


create table if not exists tasks(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  description varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;


INSERT INTO tasks (id, description, created_at, updated_at) VALUES
(1, 'Solo una prueba', '2013-06-07 08:13:28', '2013-06-07 08:13:28'),
(2, 'Una prueba más', '2013-06-07 08:14:49', '2013-06-07 08:14:49');