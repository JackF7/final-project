CREATE TABLE `sufism_comments`
(
    `id`            int(11) NOT NULL AUTO_INCREMENT,
    `title`         varchar(254) NOT NULL,
    `description`   varchar(254) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO sufism_comments (title, description) VALUES ('Oneness', '"One Love" is a great example of Islamic love!');