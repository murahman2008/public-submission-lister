# public-submission-lister

# What is it?
This is a Drupal 7 Custom module that lists nodes of type `public_submission` 

# Before you start
- Create a Vocabulary with machine name `environmental_programs`
- Add terms under the newly created vocabulary
- Create a Content Type with machine name `public_submission` (if you call it anything else, make sure to change the define in public_submission_lister.module file)
- The newly created content type must include the following fields
   * field_first_name | Text
   * field_last_name | Text
   * field_submitted_document | File (set it up with subfolder 'public_submissions')
   * field_program | Taxonomy term of the newly created vocabulary

# To access the module
- The URL to view all the active environmental_progams - /public-submission
- The URL to view the first character of the first name of all the public submissions belonging to a program - /public-submission/{programId}
- The URL to view the public submissions belonging to a program - /public-submission/{programId}/{First Character of the first name}

# Important Note:
if you have different machine name for any of the above elements, make sure to change the define in public_submission_lister.module file
