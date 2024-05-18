USE SDAIC;
-- Inserting data into tbl_Users
INSERT INTO tbl_Users (username, userPassword, userRole, userFName, userMName, userLName, userContact, userEmail, userAddress, userBirthday, userMedicalHistory)
VALUES 
('john_doe', 'password123', 'user', 'John', 'A', 'Doe', '1234567890', 'john@example.com', '123 Main St, City, Country', '1990-01-01', 'None'),
('jane_smith', 'password456', 'admin', 'Jane', 'B', 'Smith', '0987654321', 'jane@example.com', '456 Elm St, City, Country', '1985-05-15', 'Allergy to penicillin');

-- Inserting data into tbl_Procedures
INSERT INTO tbl_Procedures (procedureName)
VALUES 
('OB-GYNE'),
('CT-SCAN'),
('ECG'),
('ULTRASOUND');

-- Inserting data into tbl_Roles
INSERT INTO tbl_Roles (roleName)
VALUES 
('user'),
('admin');

-- Inserting data into tbl_Appointments
-- Here, you would need to specify userId and procedureId based on the actual userIds and procedureIds from tbl_Users and tbl_Procedures
INSERT INTO tbl_Appointments (userId, procedureId, appointmentDay, appointmentTime, appointmentStatus)
VALUES 
(1, 1, '2024-05-15', '10:00 AM', 'CONFIRMED'),
(2, 2, '2024-05-16', '11:00 AM', 'PENDING');
