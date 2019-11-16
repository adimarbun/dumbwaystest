create database dumbways_db;
use dumbways_db;

CREATE TABLE categories (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(25) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE books (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(25) DEFAULT NULL,
  stok int(11) DEFAULT NULL,
  image varchar(50) DEFAULT NULL,
  category_id int(11) DEFAULT NULL,
  deskripsi varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

--Tampilkan hasil query post tambah buku dan Kategori
INSERT INTO categories (name) VALUES ('php');
INSERT INTO categories (name) VALUES ('javascript');

INSERT INTO books (name,stok,category_id,deskripsi) VALUES ('Belajar PhP Pemula','10','1','Belajar Php bagi pemula,sangat cocok belajar dari awal');
INSERT INTO books (name,stok,category_id,deskripsi) VALUES ('Mahir Javascript','5','2','Belajar Javascript sampai Mahir, sangat cocok untuk pemula diajari sampai mahir');



--tampilkan semua buku
select * from books;

select books.name as name ,books.stok as stok, categories.name as kategori from books
inner join categories on books.category_id=categories.id;

--tampilkan produk per kategori, field ditampilkan nama kategori, nama buku, stock
select categories.name as nama_kategori, books.name as nama_buku ,books.stok as stock from books
inner join categories on books.category_id=categories.id GROUP BY books.category_id,books.id;

--tampilak detail buku berdasarkan id
select books.name as nama_buku ,books.stok as stok, categories.name as kategori from books
inner join categories on books.category_id=categories.id where books.id = 1;