USE SDAIC;

-- Populate tbl_Users
INSERT INTO tbl_Users (username, userPassword, userFName, userLName, userContact, userEmail, userAddress, userBirthday)
VALUES ('john_doe', 'password123', 'John', 'Doe', '+1234567890', 'john.doe@example.com', '123 Main St', '1990-01-01'),
       ('jane_smith', 'letmein', 'Jane', 'Smith', '+1987654321', 'jane.smith@example.com', '456 Elm St', '1992-05-15'),
       ('admin', 'adminpass', 'Admin', 'User', '+1122334455', 'admin@example.com', '789 Oak St', '1985-07-20');

-- Populate tbl_Appointments
INSERT INTO tbl_Appointments (userId, procedureId, appointmentDay, appointmentTime)
VALUES (1, 1, '2024-05-21', '10:00'),
       (2, 3, '2024-05-22', '14:30'),
       (3, 4, '2024-05-23', '09:00');

-- Populate tbl_Procedures
INSERT INTO tbl_Procedures (procedureName, doctorId, procedurePrice)
VALUES ('OB-GYNE', 1, 150),
       ('CT-SCAN', 2, 300),
       ('ECG', 3, 100),
       ('ULTRASOUND', 2, 200);

-- Populate tbl_Roles
INSERT INTO tbl_Roles (roleName) VALUES ('user'), ('admin'), ('doctor');

-- Populate tbl_Doctors
INSERT INTO tbl_Doctors (doctorName, doctorContact, doctorEmail, doctorAddress)
VALUES ('Dr. Smith', '+1122334455', 'smith@example.com', '123 Oak St'),
       ('Dr. Johnson', '+1987654321', 'johnson@example.com', '456 Pine St');
