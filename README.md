#JOBBoard

JobPortal project abstract

| Project Name         | JobBoard            |
|----------------------|---------------------|
| Upload Date          | 2020-05-13          |
| Platform             | Laravel PHP         |
| Programming Language | html,css,javascript |
| Database             | mysql               |
| Project Type         | web Application     |

##JobPortal project description

Institute has decided to make job portal for its students. The portal must have following modules: 1. Student 2. Company 3. Admin Your application must have complete authentication functionalities: 1. Register user (student & company only. Admin account will be seeded with application) 2. Login 3. Forget password and reset password 4. Update password 5. Update profile (picture, contact, etc.) All lists must be paginated. The application must have proper authentication. No user should be able to access unauthorized information of other users. Functionalities for each module is mentioned below: 1. Student module a. Student must be able to login to the application with his credentials and he will only have access to his own data b. Student must be able to maintain multiple resumes • One resume shall be marked as default c. Student must be able to maintain his cover letter d. Student must be able to watch list of active jobs • Your application must have following filters for job 1. Title 2. Skills 3. Location e. On every page there must be a list of recommended jobs • Recommended jobs must be jobs matching with the resume of the user f. Student must be able to apply to a job • On click of apply button; a popup should confirm if the user wants to upload new resume or use existing resumes. • After confirmation the resume must be sent to the company that posted the job g. Student be able to track his job application (Company will update the status; that will be show to the student) h. Students must receive a notification whenever status of any of their job applications update 2. Company module a. Company manager must be able to login to the application with his credentials and he will only have access to his own data b. They must be able manage jobs c. They must be able to watch applications/submissions against a job and change their statuses 3. Admin a. Administrator must be able to approve their students. A badge should be assigned to their students indicating a verified student of their institute. b. Administrator must be able to remove/block any user, job or application c. Administrator must be able to reset password of any of the users d. Admin must be able to watch the list of all registered and unemployed students(specifically of their institute). • On top of this list, following stats must be shown: 1. Total number of institute graduates 2. Number of registered graduates 3. Number of graduates with job 4. Number of unemployed graduates Maintain in this document means Create, Read, Update and Delete (CRUD)
