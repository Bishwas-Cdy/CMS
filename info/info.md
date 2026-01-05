# College Management System (CMS) – Project Context

## 1. Project Overview

This project is a **Web-Based College Management System (CMS)** developed using **PHP and MySQL**.
The goal is to **digitize and automate college administrative and academic processes**, replacing manual systems.

The system supports **role-based access** for three types of users:

* Admin
* Faculty
* Student

CMS manages students, faculty, courses, subjects, attendance, exams, marks, fees, payments, and notifications in a **centralized database**.

---

## 2. Objectives

* Centralize all academic and administrative data
* Reduce manual record keeping
* Improve accuracy in attendance, marks, and fees
* Provide role-based access control
* Maintain data integrity and security
* Build a scalable real-world PHP–MySQL application

---

## 3. Technology Stack

* **Backend:** PHP
* **Database:** MySQL
* **Frontend:** HTML, CSS, JavaScript
* **Server:** XAMPP (Apache + MySQL)
* **Tools:** phpMyAdmin, VS Code

---

## 4. System Architecture

The system follows a **3-layer architecture**:

1. **Presentation Layer**

   * HTML, CSS, JavaScript
   * Forms, dashboards, tables

2. **Application Layer**

   * PHP scripts
   * Handles authentication, validation, business logic

3. **Database Layer**

   * MySQL
   * Fully normalized (3NF)
   * Uses foreign keys and junction tables

---

## 5. User Roles & Responsibilities

### Admin

* Login / Logout
* Create and manage:

  * Students
  * Faculty
  * Courses
  * Subjects
* Assign subjects to faculty
* Define fee structures
* View:

  * Attendance reports
  * Marks reports
  * Payment reports

### Faculty

* Login / Logout
* View assigned subjects
* Mark student attendance
* Enter examination marks
* View attendance records

### Student

* Login / Logout
* View personal profile
* View attendance percentage
* View exam marks
* View fee payment status

---

## 6. Database Design Summary

The database is designed in **Third Normal Form (3NF)**.

### Main Tables

* users
* students
* faculty
* courses
* subjects
* exams
* marks
* attendance
* fees
* payments
* notifications

### Junction Tables (Many-to-Many)

* faculty_subject
* enrollments
* attendance_details

---

## 7. Entity Descriptions

### Users

Stores authentication and authorization details.

Fields:

* id (PK)
* email (unique)
* password (hashed)
* role (admin / faculty / student)
* created_at

---

### Students

Stores student academic profile.

Fields:

* id (PK)
* user_id (FK → users.id)
* name
* roll_number (unique)
* course_id (FK → courses.id)
* semester
* phone
* created_at

---

### Faculty

Stores faculty profile.

Fields:

* id (PK)
* user_id (FK → users.id)
* name
* department
* phone
* created_at

---

### Courses

Academic programs.

Fields:

* id (PK)
* course_name
* duration
* created_at

---

### Subjects

Subjects belong to a course and semester.

Fields:

* id (PK)
* subject_name
* course_id (FK)
* semester
* created_at

---

### Faculty_Subject

Maps which faculty teaches which subject.

Fields:

* id (PK)
* faculty_id (FK)
* subject_id (FK)
* created_at

---

### Enrollments

Maps students enrolled in subjects.

Fields:

* id (PK)
* student_id (FK)
* subject_id (FK)
* created_at

---

### Attendance

Represents a class session.

Fields:

* id (PK)
* subject_id (FK)
* course_id (FK)
* semester
* date
* created_at

---

### Attendance_Details

Stores student attendance status.

Fields:

* id (PK)
* attendance_id (FK)
* student_id (FK)
* status (present / absent)
* created_at

---

### Exams

Stores exam information.

Fields:

* id (PK)
* exam_name
* course_id (FK)
* semester
* created_at

---

### Marks

Stores marks for each student per subject per exam.

Fields:

* id (PK)
* exam_id (FK)
* student_id (FK)
* subject_id (FK)
* marks
* created_at

---

### Fees

Defines fee structure per course and semester.

Fields:

* id (PK)
* course_id (FK)
* semester
* amount
* created_at

---

### Payments

Tracks student fee payments.

Fields:

* id (PK)
* student_id (FK)
* fee_id (FK)
* status (paid / pending)
* payment_date
* created_at

---

### Notifications

Stores system-generated notifications.

Fields:

* id (PK)
* user_id (FK)
* message
* created_at

---

## 8. Business Rules

* One user can be either a student or faculty
* A course has many subjects
* A student can enroll in multiple subjects
* Faculty can teach multiple subjects
* Attendance is recorded per subject per day
* Marks are recorded per exam per subject per student
* Fee payment status is tracked per semester
* Users receive notifications based on actions

---

## 9. Non-Functional Requirements

* Secure login using PHP sessions
* Password hashing
* Role-based access control
* Data integrity using foreign keys
* Responsive UI
* Reliable database operations

---

## 10. What I Want to Build (Intent)

I want to build:

* A **fully functional CMS**
* Clean PHP CRUD operations
* Secure authentication system
* Dashboards for Admin, Faculty, and Student
* SQL queries for reports (attendance %, marks, fee dues)
* Scalable codebase suitable for academic submission and real-world usage

---

## 11. Expected Coding Style

* PHP with MySQLi or PDO
* Separate files for:

  * db connection
  * authentication
  * role validation
  * CRUD logic
* Clean and readable code
* Comments explaining logic

---


