/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
Services window connect database before we can run sql
 */
/**
 * Author:  lilace
 * Created: Jun 29, 2017
 */
DROP TABLE admin CASCADE CONSTRAINTS;

CREATE TABLE admin
(
    uid         INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    uname       VARCHAR(30) UNIQUE NOT NULL,
    pwd         VARCHAR(30) NOT NULL,
    emailAddy   VARCHAR(255)
);

DROP TABLE users CASCADE CONSTRAINTS;

CREATE TABLE users
(
    userID      INT(25) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uname       VARCHAR(65) NOT NULL,
    pwd         VARCHAR(32) NOT NULL,
    emailAddy   VARCHAR(255) NOT NULL
);