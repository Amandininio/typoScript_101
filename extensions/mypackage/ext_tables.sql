#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    preparation_difficulty  varchar(255) DEFAULT '' NOT NULL,
    difficulty_level        varchar(255) DEFAULT '' NOT NULL,
    preparation_time        smallint,
    cooking_time            smallint DEFAULT 0 NOT NULL,
    servings                smallint DEFAULT 0 NOT NULL
);