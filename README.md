# capstone

## File Structure

**Bold text is a folder**
- Nested items are files within a folder

**Main folder (htdocs in MAMP on our own computers, no folder in GitHub)**
- index.php (set up to be ready to include List.js)
- post.php
- post-submission.php (set up to be ready to include the Ace HTML editor)
- submit-post.php
- submit-post.php
- footer.php
- head.php
- header.php (There's no need to include a separate nav.php if you build the header like this:
  - header
    - nav
      - a (link to index.php)
      - h1 (site title)
      - a (link to post-submission.php)
    - /nav
   - /header
 - db_connect.php
- scripts.php (Fill with the references to JQuery, List.js, the Ace library, and the custom JavaScript file at js/script.js. Include at the bottom of the pages. The Ace editor won't work if referenced before its HTML).

- **css**
  - styles.css

- **js**
  - script.js

- **db**
  - a .sql export of the database so we can all have the same database in phpMyAdmin
