CREATE TABLE `insly_employee` (
	`SSN` varchar(100) NULL,
	`current_employee` enum('yes','no') NULL COMMENT 'Is a current employee (yes/no)',
	`email` varchar(255) NULL,
	`phone` varchar(255) NULL,
	`address` text NULL,
	PRIMARY KEY (`employeeID`) 
) ENGINE = InnoDB;

CREATE TABLE `insly_employee_languages` (
	`work_experience` text NULL COMMENT 'Previous work experience',
	`education` text NULL COMMENT 'Education information',
) ENGINE = InnoDB;

CREATE TABLE `insly_employee_log` (
) ENGINE = InnoDB;