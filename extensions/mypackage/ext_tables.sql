#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    tx_examples_separator   varchar(255) DEFAULT '0' NOT NULL,
    preparation_difficulty  varchar(255) DEFAULT '' NOT NULL,
    preparation_time        smallint,
    cooking_time            smallint DEFAULT 0 NOT NULL,
    servings                smallint DEFAULT 0 NOT NULL,
    ingredients_lists       varchar(255) DEFAULT '' NOT NULL
);