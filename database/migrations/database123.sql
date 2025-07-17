use catering;
create table cliente(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL

);

create table pedido( 
    id int AUTO_INCREMENT PRIMARY Key,
    fecha_entrega date,
    estado BOOLEAN,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL
);
create table plato(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
)

create table insumos(
    id int AUTO_INCREMENT PRIMARY KEY
    nombre VARCHAR(50) NOT NULL,
    cantidad int NOT
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
)

----TABLAS INTEEMEDIAS 
---tabla ntermedia entre cliente y pedido  cli_ped
create Table cli_ped(
    id int AUTO_INCREMENT PRIMARY KEY
    id_cliente INT,
    id_pedido int,
    FOREIGN KEY(id_cliente) references cliente(id),
    FOREIGN KEY(id_pedido) references pedido(id)
)

---tabla intermedia entre pedido y plato 
CREATE Table ped_plat(
    id int PRIMARY KEY,
    id_pedido int,
    id_plato int,
    FOREIGN KEY(id_pedido) references pedido(id),
    FOREIGN KEY(id_plato) references plato(id)
)


---tabla intermedia entre platos y insumos 
CREATE Table pla_ins(
    id int AUTO_INCREMENT PRIMARY KEY,
    id_plato int,
    id_insumo int,
    FOREIGN KEY(id_plato) references plato(id),
    FOREIGN KEY(id_insumo) references insumos(id)
);