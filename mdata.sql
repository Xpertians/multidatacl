CREATE TABLE IF NOT EXISTS users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  identifier text NOT NULL UNIQUE,
  email text DEFAULT NULL,
  first_name text DEFAULT NULL,
  last_name text DEFAULT NULL,
  avatar_url text
);
