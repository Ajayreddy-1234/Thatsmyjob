# That's My Job

**That's My Job** is a Laravel-based web application designed to connect freelancers with recruiters, streamlining the job application and hiring process. The platform offers dedicated modules for freelancers, recruiters, and administrators, each equipped with tailored features to enhance user experience and efficiency.

## Features

- **Freelancer Module**: Freelancers can create and manage their profiles, apply for job postings, and track application statuses.
- **Recruiter Module**: Recruiters can post job openings, review freelancer applications, and shortlist candidates based on their profiles.
- **Administrator Module**: Administrators have access to manage user accounts, oversee job postings, and perform CRUD (Create, Read, Update, Delete) operations to maintain platform integrity.
- **Time Tracking Feature**: Utilizes JavaScript functions such as focus, blur, load, beforeunload, and unload to monitor and manage the time freelancers and recruiters spend on the platform, promoting productivity and transparency.

## Prerequisites

Before setting up the project, ensure you have the following installed:

- PHP >= 7.3
- Composer
- Node.js with npm
- A web server like Apache or Nginx
- A database system like MySQL or PostgreSQL

## Installation

### Clone the repository:

```bash
git clone https://github.com/Ajayreddy-1234/Thatsmyjob.git
cd Thatsmyjob
```
### Install PHP dependencies:

```bash
composer install
```

### Install Node.js dependencies:
```bash
npm install
```

### Copy the example environment file and configure:
```bash
cp .env.example .env
```
Update the .env file with your database credentials and other necessary configurations.

### Generate the application key:
```bash
php artisan key:generate
```

### Run database migrations:
```bash
php artisan migrate
```

### Compile Assets:
For Development:
```bash
npm run dev
```

### Start the Development Server:
```bash
php artisan serve
```

Access the application at http://localhost:8000

## Contributing

I welcome contributions to enhance the platform. Please fork the repository, create a new branch for your feature or bug fix, and submit a pull request.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
