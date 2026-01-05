**Root**
- index.php — landing logic; include `config/init.php`, shared partials, route to dashboards

**config/**
- db.php — PDO/MySQLi connection
- init.php — bootstraps sessions, autoloaders, constants, helpers

**partials/**
- header.php / footer.php / sidebar.php — reusable layout pieces

**auth/**
- login.php / logout.php / register.php
- middleware.php — role guards, redirect helpers

**controllers/**
- Admin/, Faculty/, Student/ folders — each with small controller files for CRUD actions (e.g., `Admin/StudentsController.php`)
- ReportController.php — attendance %, marks, fees

**models/**
- User.php, Student.php, Course.php, Subject.php, etc. — encapsulate DB queries; keep SQL in one place

**views/**
- admin/, faculty/, student/ — each with dashboard and entity views
- shared/ — forms, tables reused across roles

**routes/**
- web.php — maps query params or friendly paths to controller actions (simple front-controller pattern)

**public/**
- css/, js/, img/, uploads/ — assets and user uploads; can be the web root if using Apache’s DocumentRoot pointing here

**utils/**
- helpers.php — formatting, flash messages, input sanitizer
- constants.php — role names, status enums
- validators.php — form validation logic

**storage/**
- logs/ — error/activity logs
- cache/ — if you later cache reports

**tests/** (optional but handy)
- Basic PHP unit tests or even simple scripts to verify large queries.

This layout keeps presentation, business logic, and persistence separate, makes it easy to grow features per role, and mirrors the DB entities. Let me know if you’d rather keep controllers + models merged or if you need a slimmer version.


