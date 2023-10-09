

-- Create the form_data table
CREATE TABLE form_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Add a unique constraint on the email column to ensure email uniqueness
-- ALTER TABLE form_data ADD CONSTRAINT unique_email UNIQUE (email);
