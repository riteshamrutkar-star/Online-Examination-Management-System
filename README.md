# Online-Examination-Management-System
# Online Examination System (CodeIgniter 3)

A comprehensive online examination system built with CodeIgniter 3, featuring distinct interfaces for students, teachers, and administrators.

## 🚀 Key Features

### For Students
- **Dashboard**: View enrolled courses and exam history.
- **Enrollment**: Enroll in courses using provided codes.
- **Exams**: Attempt multiple-choice (MCQ) exams with real-time timers.
- **Results**: View detailed results including scores, correct/incorrect answers, and time taken.
- **Settings**: Manage profile and change password.

### For Teachers
- **Dashboard**: Overview of courses and student performance.
- **Course Management**: Create and manage courses.
- **Question Management**: Add and organize questions categorized by subject and difficulty.
- **Exam Setup**: Create timed quizzes with specific time limits and point values.
- **Result Analysis**: View detailed analytics for each student's performance.

### For Administrators
- **User Management**: Create and manage student and teacher accounts.
- **System Settings**: Configure exam durations and grading policies.
- **Audit Trail**: View detailed logs of system activities.

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, Bootstrap 3
- **Backend**: PHP
- **Framework**: CodeIgniter 3
- **Database**: MySQL

---

## 📂 Project Structure

```
Online-Examination-Management-System/
├── admin/                     # Administrator controllers, views, and models
├── application/               # CodeIgniter application core
│   ├── config/                # Configuration files
│   ├── controllers/           # Application logic
│   ├── models/                # Database models
│   ├── views/                 # Presentation layer (HTML/Bootstrap)
│   └── ...
├── assets/                    # Static assets (CSS, JS, Images)
├── student/                   # Student-facing modules
├── teacher/                   # Teacher-facing modules
├── uploads/                   # Uploaded files directory
└── ...
```

---

## 🔌 Installation & Setup

### Prerequisites
- PHP 7.x or higher
- MySQL
- Apache or Nginx
- CodeIgniter 3

### Steps
1.  **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/Online-Examination-Management-System.git
    cd Online-Examination-Management-System
    ```

2.  **Set up the database**
    - Create a database named `online_exam` (or modify the config).
    - Import the SQL dump from the `database/` folder (if available).

3.  **Configure CodeIgniter**
    - Open `application/config/config.php`:
        - Set `$config['base_url']` to your project URL.
        - Update database credentials in `application/config/database.php`.

4.  **Configure Paths**
    - Ensure `application/config/routes.php` is set up for the correct default controller.
    - Verify `assets/` path if needed.

---

## 🔑 Default Credentials

*(Note: These are example credentials. Check the database or seed scripts for actual values.)*

| Role         | Username        | Password      | Email                     |
|--------------|-----------------|---------------|---------------------------|
| **Admin**    | `admin`         | `admin@123`   | [EMAIL_ADDRESS]` |
| **Teacher**  | `teacher`       | `teacher@123` | [EMAIL_ADDRESS]` |
| **Student**  | `student`       | `student@123` | [EMAIL_ADDRESS]` |

### Login URLs
- **Admin Login**: `http://localhost/online-exam/admin/login`
- **Teacher Login**: `http://localhost/online-exam/teacher/login`
- **Student Login**: `http://localhost/online-exam/student/login`

---

## 🎨 Design & UI

The system uses **Bootstrap 3** for a responsive and clean user interface.

- **Colors**: Professional blue and gray scheme.
- **Layout**: Modern card-based design for dashboards and results.
- **Responsiveness**: Optimized for both desktop and mobile devices.

---

## 🔐 Security

- Password hashing (md5/sha1 likely, review `application/models/User_model.php`).
- CSRF protection enabled by default in CodeIgniter.
- Role-based access control across `admin/`, `teacher/`, and `student/` modules.

---

## 🤝 Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

---

## 📝 License

This project is open-sourced software licensed under the **MIT license**.