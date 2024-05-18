CREATE DATABASE IF NOT EXISTS SDAIC;

USE SDAIC;

CREATE TABLE IF NOT EXISTS tbl_Users (
    userId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(32) NOT NULL,
    userPassword VARCHAR(32) NOT NULL,
    userRole VARCHAR(32) DEFAULT 'user',
    userFName VARCHAR(32) NOT NULL,
    userMName VARCHAR(32),
    userLName VARCHAR(32) NOT NULL,
    userContact VARCHAR(20) NOT NULL,
    userEmail VARCHAR(64) NOT NULL,
    userAddress VARCHAR(128) NOT NULL,
    userBirthday DATE NOT NULL,
    userMedicalHistory VARCHAR(256),
    userRegisterDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS tbl_Appointments (
    appointmentId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    userId INT(11),
    procedureId INT(11),
    appointmentDay VARCHAR(32) NOT NULL,
    appointmentTime VARCHAR(32) NOT NULL,
    appointmentStatus VARCHAR(32) DEFAULT 'PENDING'
);

CREATE TABLE IF NOT EXISTS tbl_Procedures (
    procedureId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    procedureName VARCHAR(64) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_Roles (
    roleId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    roleName VARCHAR(32) NOT NULL
);

ALTER TABLE tbl_Appointments
ADD CONSTRAINT fk_userId FOREIGN KEY (userId) REFERENCES tbl_Users(userId),
ADD CONSTRAINT fk_procedureId FOREIGN KEY (procedureId) REFERENCES tbl_Procedures(procedureId);

