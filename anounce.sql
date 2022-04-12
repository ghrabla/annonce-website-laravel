CREATE TABLE user (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(30) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(255) NOT NULL
);

CREATE TABLE anounce (
    id int PRIMARY KEY AUTO_INCREMENT,
    description varchar(800),
    picture varchar(50),
    type varchar(50),
    userId int ,
    published_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES user(id) ON DELETE CASCADE
);

CREATE TABLE comment (
    id int PRIMARY KEY AUTO_INCREMENT,
    text varchar(800),
    published_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    userId INT NOT NULL,
    anounceId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (anounceId) REFERENCES anounce(id) ON DELETE CASCADE
);
