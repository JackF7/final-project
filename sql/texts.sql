/* CREATE TABLE texts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255),
    content TEXT NOT NULL
);

CREATE TABLE annotations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    text_id INT,
    user_id INT,
    verse_number INT,
    annotation TEXT,
    FOREIGN KEY (text_id) REFERENCES texts(id)
);
*/
