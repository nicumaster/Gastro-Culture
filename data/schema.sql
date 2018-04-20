DROP DATABASE IF EXISTS gastro_culture_DB;

CREATE  DATABASE gastro_culture_DB;

USE gastro_culture_DB;

CREATE TABLE  users (
  user_id   INT UNSIGNED NOT NULL AUTO_INCREMENT,
  username  VARCHAR(64)  NOT NULL,
  firstname VARCHAR(64)  NOT NULL,
  lastname  VARCHAR(64)  NOT NULL,
  email     VARCHAR(128) NOT NULL,
  password  VARCHAR(40)  NOT NULL,
  PRIMARY KEY  (user_id));

CREATE TABLE  regions (
  region_id     INT UNSIGNED NOT NULL AUTO_INCREMENT,
  region        VARCHAR(64)  NOT NULL,
  mainlanguage  VARCHAR(64)  NOT NULL,
  PRIMARY KEY  (region_id));

CREATE TABLE  countries (
  country_id    INT UNSIGNED NOT NULL AUTO_INCREMENT,
  region_id     INT UNSIGNED NOT NULL,
  country       VARCHAR(64)  NOT NULL,
  language      VARCHAR(64)  NOT NULL,
  population    INT NOT NULL,
  PRIMARY KEY  (country_id),
  CONSTRAINT FK_Region FOREIGN KEY (region_id)
  REFERENCES regions(region_id)
  ON DELETE CASCADE);

CREATE TABLE  recipes (
  recipe_id    INT UNSIGNED NOT NULL AUTO_INCREMENT,
  country_id   INT UNSIGNED NOT NULL,
  recipe       VARCHAR(64)  NOT NULL,
  culture      VARCHAR(64)  NOT NULL,
  history      VARCHAR(500)  NOT NULL,
  description  VARCHAR(500)  NOT NULL,
  PRIMARY KEY  (recipe_id),
  CONSTRAINT FK_Country FOREIGN KEY (country_id)
  REFERENCES countries(country_id)
  ON DELETE CASCADE);

CREATE TABLE  ingredients (
  ingredient_id    INT UNSIGNED NOT NULL AUTO_INCREMENT,
  ingredient       VARCHAR(64)  NOT NULL,
  PRIMARY KEY  (ingredient_id));

CREATE TABLE  ingredients_recipies (
  ingredient_recipe_id    INT UNSIGNED NOT NULL,
  ingredient_id           INT UNSIGNED NOT NULL,
  recipe_id               INT UNSIGNED NOT NULL,
  quantity_gr             INT NOT NULL,
  PRIMARY KEY  (ingredient_recipe_id),
  CONSTRAINT FK_Ingredient FOREIGN KEY (ingredient_id)
  REFERENCES ingredients(ingredient_id)
  ON DELETE CASCADE,
  CONSTRAINT FK_recipe FOREIGN KEY (recipe_id)
  REFERENCES recipes(recipe_id)
  ON DELETE CASCADE);

INSERT INTO ingredients (ingredient) VALUES
  ('Chäs'),
  ('Spaghetti'),
  ('Nüsse'),
  ('Ananas'),
  ('Härdöpfffu');


INSERT INTO regions (region) VALUES
  ('Alaska'),
  ('Canada'),
  ('Europe'),
  ('Russia'),
  ('USA'),
  ('South America'),
  ('Africa'),
  ('Asia'),
  ('Australia');