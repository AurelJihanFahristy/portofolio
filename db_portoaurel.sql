CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    tech_stack VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    github_link VARCHAR(255),
    demo_link VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE educations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    institution VARCHAR(100) NOT NULL,
    degree VARCHAR(50) NOT NULL,
    major VARCHAR(100) NOT NULL,
    start_year INT NOT NULL,
    end_year INT NOT NULL,
    gpa VARCHAR(5),
    description TEXT,
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL,
    category ENUM('Language', 'Framework', 'Database', 'Tools') NOT NULL
);