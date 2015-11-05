CREATE TABLE `roa_points_costs` (
`id`  int(4) NOT NULL ,
`points`  int(4) NOT NULL DEFAULT 0 COMMENT 'Costs of Options in RoA-Points' ,
`descriptions`  varchar(255) NULL ,
PRIMARY KEY (`id`)
);

ALTER TABLE `roa_points_costs`
ADD COLUMN `enabled`  int(1) NULL DEFAULT 0 COMMENT 'If Point is enabled.' AFTER `Descriptions`;

ALTER TABLE `roa_points_costs`
ADD COLUMN `name`  varchar(50) NOT NULL AFTER `enabled`;


CREATE TABLE `roa_user_points` (
`user_id`  mediumint(8) NOT NULL ,
`points_curr`  int(10) NULL DEFAULT NULL ,
`points_life`  int(15) NULL DEFAULT NULL ,
PRIMARY KEY (`user_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
ROW_FORMAT=COMPACT
;

CREATE TABLE `roa_points_log` (
`id`  int(15) NOT NULL ,
`user_id`  int(10) NOT NULL ,
`date`  int(12) NOT NULL ,
`points`  int(5) NOT NULL ,
`reason`  varchar(255) NOT NULL ,
`from`  varchar(20) NOT NULL ,
PRIMARY KEY (`id`)
);
ALTER TABLE `roa_points_log`
MODIFY COLUMN `id`  int(15) NOT NULL AUTO_INCREMENT FIRST ;
ALTER TABLE `roa_points_log`
MODIFY COLUMN `reason`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `points`;

CREATE TABLE `roa_donation_log` (
`id`  int(11) NOT NULL ,
`user_id`  int(11) NOT NULL ,
`date`  int(11) NOT NULL ,
`money`  decimal(5,2) NOT NULL ,
`by`  varchar(25) NOT NULL ,
`paypal`  text NULL ,
PRIMARY KEY (`ID`)
);
ALTER TABLE `roa_donation_log`
MODIFY COLUMN `id`  int(15) NOT NULL AUTO_INCREMENT FIRST ;

CREATE TABLE `roa_money_log` (
`id`  int(10) NOT NULL ,
`date`  int(11) NOT NULL ,
`money`  decimal(8,2) NOT NULL ,
`description`  text NOT NULL ,
PRIMARY KEY (`id`)
);
ALTER TABLE `roa_money_log`
MODIFY COLUMN `id`  int(10) NOT NULL AUTO_INCREMENT FIRST ;


CREATE TABLE `roa_user_unbanns` (
`banned_fid`  int(10) NOT NULL ,
`banned_gid`  int(10) NOT NULL ,
`banned_from`  int(11) NOT NULL ,
`banned_till`  int(11) NOT NULL ,
`level`  varchar(5) NOT NULL ,
`unbannedby`  varchar(50) NOT NULL ,
`unbannip`  varchar(20) NOT NULL ,
`date`  timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP 
);

CREATE TABLE `roa_user_banns` (
`fid`  int(10) NOT NULL ,
`gid`  int(10) NOT NULL ,
`from`  int(11) NOT NULL ,
`till`  int(11) NOT NULL ,
`level`  varchar(5) NOT NULL ,
`bannedby`  varchar(50) NOT NULL ,
`contact`  int(1) NULL ,
`reason`  varchar(255) NULL 
)
;