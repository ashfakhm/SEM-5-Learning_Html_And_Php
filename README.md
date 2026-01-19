# SEM-5 Learning: HTML, CSS, JavaScript & PHP

A comprehensive full-stack web development learning repository covering front-end and back-end technologies. This project demonstrates core web development concepts through practical implementations and real-world examples.

---

## 📋 Table of Contents

- [Overview](#overview)
- [Technologies Stack](#technologies-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Modules](#modules)
- [Prerequisites](#prerequisites)
- [Installation & Setup](#installation--setup)
- [Usage](#usage)
- [Project Features](#project-features)
- [File Descriptions](#file-descriptions)
- [Best Practices](#best-practices)
- [Contributing](#contributing)
- [License](#license)

---

## 🎯 Overview

This repository contains comprehensive coursework for Semester 5, focusing on full-stack web development fundamentals. It includes hands-on implementations of:

- **Frontend Technologies**: HTML5, CSS3, and JavaScript
- **Backend Technologies**: PHP with database integration
- **Core Concepts**: Forms, validation, DOM manipulation, arrays, and database operations

The project serves as a learning resource for understanding how different web technologies work together to build functional web applications.

---

## 🛠️ Technologies Stack

| Category     | Technologies                                              |
| ------------ | --------------------------------------------------------- |
| **Frontend** | HTML5, CSS3, JavaScript (ES5+)                            |
| **Backend**  | PHP 7+                                                    |
| **Database** | MySQL/MariaDB                                             |
| **Tools**    | Web Browser, Text Editor/IDE, Local Server (Apache/Nginx) |

---

## 📁 Project Structure

```
SEM-5-Learning_Html_And_Php/
├── Assets/                          # Media files and resources
├── Html Css/                        # HTML and CSS fundamentals
│   ├── 01-Form Illustration - I.html
│   ├── 02-Form Illustration - II.html
│   ├── 03-Form Illustration - III.html
│   ├── 04-Fieldset and legend.html
│   ├── 05-Internal css.html
│   ├── 06-Text alignment.html
│   ├── 07-Inline css.html
│   ├── 08-External css.html
│   ├── 09-Image gallery.html
│   ├── Form Illustration  Submission.html
│   └── style.css                    # Shared CSS styles
├── JS/                              # JavaScript implementations
│   ├── 10-Area and Circumference of Circle.html
│   ├── 11-Type of Triangles.html
│   ├── 12-Form Events.html
│   ├── 13-Multiplication Table.html
│   ├── 14-Simple Calculator.html
│   ├── 15-Array Demonstration.html
│   ├── 16-Digital Clock.html
│   └── 17-Form Validation.html
├── PHP/                             # PHP backend implementations
│   ├── 18-Armstrong.php
│   ├── 19. Perfect, abundant or deficient .php
│   ├── 20. Fibonacci Series .php
│   ├── 21. Bio data .php
│   ├── 22. Login page.php
│   ├── 23. Mark list .php
│   ├── 24. Payslip .php
│   ├── 25. Product database .php
│   ├── 26. Database - update and update.php
│   ├── 27. List of fruits.php
│   ├── 28. Array operations.php
│   └── Php Databse/                 # Database SQL files
│       └── NA.sql                   # Database schema
└── README.md                        # This file
```

---

## 🚀 Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- **Web Browser**: Chrome, Firefox, Safari, or Edge (latest version)
- **Text Editor/IDE**: VS Code, Sublime Text, PhpStorm, or similar
- **Local Server**:
  - XAMPP, WAMP, or LAMP stack for PHP execution
  - Node.js with a simple HTTP server alternative
- **Database**: MySQL/MariaDB (for PHP database operations)

### Installation & Setup

1. **Clone or Download the Repository**

   ```bash
   git clone <repository-url>
   cd SEM-5-Learning_Html_And_Php
   ```

2. **Set Up Local Server**

   **Option A: Using XAMPP (Windows/Mac/Linux)**

   ```bash
   # Place project in xampp/htdocs/ directory
   # Start Apache and MySQL from XAMPP Control Panel
   # Access via: http://localhost/SEM-5-Learning_Html_And_Php
   ```

   **Option B: Using Python HTTP Server**

   ```bash
   # For HTML/CSS/JS files only
   python -m http.server 8000
   # Access via: http://localhost:8000
   ```

3. **Configure Database (for PHP modules)**

   ```sql
   -- Create database
   CREATE DATABASE college_programs;

   -- Update connection credentials in PHP files
   -- Modify database host, username, and password as needed
   ```

4. **Open in Browser**
   - Navigate to `http://localhost/<project-path>` or respective file location
   - For static files: Open HTML files directly in browser

---

## 📚 Modules

### Module 1: HTML & CSS Fundamentals (Files 01-09 + Form Submission)

Covers form design, CSS styling techniques, and responsive layouts:

- Form illustration and structure with submission handling
- CSS implementation methods (internal, external, inline)
- Image galleries and layout techniques

### Module 2: JavaScript Essentials (Files 10-17)

Interactive front-end applications demonstrating JavaScript capabilities:

- Mathematical computations (circle area, triangle types)
- DOM event handling and form validation
- Dynamic content generation (clock, calculator, multiplication tables)
- Array operations and data manipulation

### Module 3: PHP Backend Development (Files 18-28)

Server-side programming and database integration:

- Mathematical algorithms (Armstrong, Fibonacci)
- Form processing and user authentication
- Database CRUD operations
- Dynamic data presentation (payslips, mark lists)

---

## 💡 Usage

### Running HTML/CSS Files

```bash
# Open directly in browser
Open file with right-click → Open with Browser

# Or use live server extension in VS Code
```

### Running JavaScript Files

```bash
# Open HTML files in browser
# JavaScript executes client-side automatically
```

### Running PHP Files

```bash
# Requires local server setup
# Access via: http://localhost/path-to-file.php

# Or run directly with PHP CLI
php filename.php
```

---

## ✨ Project Features

- ✅ **Comprehensive Coverage**: HTML5, CSS3, JavaScript, and PHP
- ✅ **Practical Examples**: Real-world implementations and use cases
- ✅ **Progressive Learning**: Structured from basics to advanced topics
- ✅ **Database Integration**: MySQL operations and data management
- ✅ **Form Handling**: Client-side validation and server-side processing
- ✅ **Responsive Design**: Modern CSS techniques and layout strategies
- ✅ **Event Handling**: JavaScript DOM manipulation and event listeners
- ✅ **Authentication**: Basic login and session management

---

## 📄 File Descriptions

### HTML & CSS Directory

| File                         | Description                                   |
| ---------------------------- | --------------------------------------------- |
| 01-Form Illustration - I     | Basic form structure and HTML elements        |
| 02-Form Illustration - II    | Advanced form design with various input types |
| 03-Form Illustration - III   | Complex form layouts and grouping             |
| 04-Fieldset and legend       | Form organization with fieldset elements      |
| 05-Internal css              | Styling using `<style>` tags                  |
| 06-Text alignment            | Text alignment and typography                 |
| 07-Inline css                | Direct element styling with inline CSS        |
| 08-External css              | CSS file linking and modular styling          |
| 09-Image gallery             | Image display and gallery layouts             |
| Form Illustration Submission | Form submission and data handling example     |

### JavaScript Directory

| File                      | Description                         |
| ------------------------- | ----------------------------------- |
| 10-Area and Circumference | Geometric calculations              |
| 11-Type of Triangles      | Triangle classification algorithm   |
| 12-Form Events            | Event listener implementation       |
| 13-Multiplication Table   | Dynamic table generation            |
| 14-Simple Calculator      | Basic arithmetic operations         |
| 15-Array Demonstration    | Array methods and manipulation      |
| 16-Digital Clock          | Real-time clock display             |
| 17-Form Validation        | Input validation and error handling |

### PHP Directory

| File                              | Description                          |
| --------------------------------- | ------------------------------------ |
| 18-Armstrong                      | Armstrong number detection algorithm |
| 19-Perfect, abundant or deficient | Number classification algorithm      |
| 20-Fibonacci Series               | Fibonacci sequence generation        |
| 21-Bio data                       | Personal information form processing |
| 22-Login page                     | User authentication implementation   |
| 23-Mark list                      | Student grade management             |
| 24-Payslip                        | Salary calculation and display       |
| 25-Product database               | Database CRUD operations             |
| 26-Database - update and delete   | Advanced database operations         |
| 27-List of fruits                 | Data presentation from database      |
| 28-Array operations               | Server-side array manipulation       |

---

## 🎓 Best Practices

### Code Quality

- Use semantic HTML elements
- Follow CSS naming conventions (BEM, SMACSS)
- Implement proper JavaScript scoping
- Use prepared statements in PHP to prevent SQL injection

### Security

- Validate all user inputs
- Use password hashing in authentication
- Sanitize database queries
- Implement CSRF protection for forms

### Performance

- Minimize CSS and JavaScript files
- Optimize image sizes and formats
- Use caching strategies
- Implement lazy loading where applicable

### Accessibility

- Use proper heading hierarchy
- Add alt text to images
- Ensure keyboard navigation
- Use semantic HTML for screen readers

---

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/improvement`)
3. Commit your changes (`git commit -m 'Add improvement'`)
4. Push to the branch (`git push origin feature/improvement`)
5. Open a Pull Request

---

## � Collaborators

This project was developed in collaboration with:

- **[@MNK-21](https://github.com/MNK-21)** - Collaborated on various modules and implementations

---

## �📝 License

This project is provided as educational material. Please check institutional guidelines for usage rights.

---

## 📧 Contact & Support

For questions, issues, or suggestions regarding this learning repository, please open an issue or contact the repository maintainer.

---

**About This Repository**: This program was completed during the pursuit of BSc Computer Science at Farook College, as part of the 5th Semester lab cycle covering HTML, PHP, and JavaScript fundamentals.

**Last Updated**: January 2026  
**Status**: Active Learning Repository  
**Difficulty Level**: Beginner to Intermediate
