#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    preparation_difficulty  varchar(255) DEFAULT '' NOT NULL,
    difficulty_level        varchar(255) DEFAULT '' NOT NULL,
    preparation_time        smallint,
    cooking_time            smallint DEFAULT 0 NOT NULL,
    servings                smallint DEFAULT 0 NOT NULL,
    ingredients_list        int(11) unsigned DEFAULT '0' NOT NULL
);

create TABLE tt_content_ingredients(
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    tx_mypackage_recipe_ingredients_list varchar(255) DEFAULT '' NOT NULL,
);