
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Minh Khuê',NULL,'','','','');
	
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Minh Khuê',NULL,'','','','');
	
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Minh Khuê',NULL,'','','','');
	
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Minh Khuê',NULL,'','','','');
	
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Minh Khuê',NULL,'','','','');
INSERT INTO categories(id,name,parent_id, thumbnail, slug, description, created_at)
	VALUES ('','Nguyễn Thị Nga',NULL,'','','','');
	

	
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog','travel','','',NULL,'',NULL,'10','');
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog','travel','','',NULL,'',NULL,'10','');
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog','travel','','',NULL,'',NULL,'10','');
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog','travel','','',NULL,'',NULL,'10','');
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog','travel','','',NULL,'',NULL,'10','');
INSERT INTO posts(id, title, description, thumbnail, content, user_id, slug, category_id, view_count, created_at) 
		VALUES ('','New Blog 2','travel 2','','',NULL,'',NULL,'30','');
	
	
	
	
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Minh Khuê','mk@gmail.com','','','');
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Minh Khuê','mk@gmail.com','','','');
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Minh Khuê','mk@gmail.com','','','');
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Minh Khuê','mk@gmail.com','','','');
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Minh Khuê','mk@gmail.com','','','');
INSERT INTO users( id, name, email, password, avatar, created_at) 
	VALUES ('','Nguyễn THị Nga 111','nnt@gmail.com','','','');
		
SELECT * FROM posts
WHERE  view_count >='10';

SELECT * FROM posts
ORDER BY created_at
LIMIT 5;

SELECT * FROM users
ORDER BY created_at
LIMIT 5;

SELECT * FROM categories
ORDER BY created_at
LIMIT 5;


SELECT p.*, u.id, c.id FROM users u 
JOIN posts p 
JOIN categories c on c.id = p.category_id 
AND u.id = p.user_id
WHERE c.id = 1 AND u.id = 1;


ALTER TABLE posts
ADD COLUMN content