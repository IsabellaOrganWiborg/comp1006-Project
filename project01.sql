-- Renamed to be the same as dbname

-- Step 1: (5 points) Create and use a database called 'project01'
-- Ensure you check first if it already exists
-- CREATE YOUR DATABASE AND SET IT TO BE USED BELOW THIS LINE --

drop database project01; -- drops any existing db with the same name
Create database project01; -- creates new db 
use project01; -- declares which db used

-- Step 2: (30 points) Create a table called 'supers' (3 points) with the following fields
-- Ensure you use logical data types
-- Ensure you use the NULL and NOT NULL logically
-- Ensure you check first if it already exists
--    id (must be the primary key and auto incrementing) (5 points)
--    first_name (2 points)
--    last_name (2 points)
--    date_of_birth (2 points)
--    alias (2 points)
--    active (2 points)
--    hero (2 points)
--    created_at (default is the current date and time) (4 points)
--    updated_at (default is the current date and time but when updated it should update the date and time) (6 points)

-- * HINT: Only 2 of the data types are strings...

-- CREATE YOUR TABLE BELOW THIS LINE --

CREATE TABLE  supers (
	id int(11) NOT NULL,
    first_name varchar(30) NOT NULL,
    last_name varchar(30) NOT NULL,
    date_of_birth date,
    alias varchar(50) NOT NULL,
    active varchar(20) NOT NULL,
    hero varchar(50) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Primary Key (id)
);


-- TOTAL POINTS POSSIBLE: 35