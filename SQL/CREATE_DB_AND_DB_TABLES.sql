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
    appointmentStatus VARCHAR(32) DEFAULT 'PENDING',
    FOREIGN KEY (userId) REFERENCES tbl_Users(userId),
    FOREIGN KEY (procedureId) REFERENCES tbl_Procedures(procedureId)
);

CREATE TABLE IF NOT EXISTS tbl_Procedures (
    procedureId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    procedureName VARCHAR(64) NOT NULL,
    doctorId INT(11),
    procedurePrice INT(11) NOT NULL,
    FOREIGN KEY (doctorId) REFERENCES tbl_Doctors(doctorId)
);

CREATE TABLE IF NOT EXISTS tbl_Roles (
    roleId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    roleName VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_Doctors (
    doctorId INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    doctorName VARCHAR(32) NOT NULL,
    doctorContact VARCHAR(32) NOT NULL,
    doctorEmail VARCHAR(64) NOT NULL,
    doctorAddress VARCHAR(128) NOT NULL
);
