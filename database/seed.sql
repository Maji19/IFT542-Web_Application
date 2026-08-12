USE ift542;

-- =========================
-- USERS
-- =========================

INSERT INTO users
    (email, password_hash, role)
VALUES
    (
        'student@test.local',
        'REPLACE_WITH_STUDENT_HASH',
        'student'
    ),
    (
        'student2@test.local',
        'REPLACE_WITH_STUDENT_HASH',
        'student'
    ),
    (
        'admin@test.local',
        'REPLACE_WITH_ADMIN_HASH',
        'admin'
    );


-- =========================
-- COURSES
-- =========================

INSERT INTO courses
    (course_code, course_title, department)
VALUES
    ('IFT511', 'Information Technology Management', 'Information Technology'),
    ('IFT512', 'Web Application Security', 'Information Technology'),
    ('IFT513', 'Database Management Systems', 'Information Technology'),
    ('IFT514', 'Software Engineering', 'Information Technology'),
    ('IFT515', 'Network Security', 'Information Technology'),
    ('IFT516', 'Information Systems', 'Information Technology'),
    ('IFT532', 'Simulation and Modelling', 'Information Technology');