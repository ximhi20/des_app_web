# Lista de videojuegos documentation
## Summary

- [Introduction](#introduction)
- [Database Type](#database-type)
- [Table Structure](#table-structure)
	- [Videojuego](#videojuego)
	- [Clase](#clase)
	- [Compañía](#compañía)
	- [Ciudad](#ciudad)
	- [País](#país)
	- [Continente](#continente)
	- [Dirección](#dirección)
	- [Calle](#calle)
	- [Videojuego-clase](#videojuego-clase)
	- [Videojuego-plataforma](#videojuego-plataforma)
	- [Plataforma](#plataforma)
- [Relationships](#relationships)
- [Database Diagram](#database-diagram)

## Introduction

## Database type

- **Database system:** MySQL
## Table structure

### Videojuego

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement | fk_Videojuego_id_Videojuego-clase | |
| **Nombre juego** | VARCHAR(255) | null |  | |
| **Descripción juego** | TINYTEXT(65535) | null |  | |
| **Precio** | DECIMAL | null |  | |
| **Lanzamiento juego** | DATE | null |  | |
| **Portada** | VARCHAR(255) | null |  | |
| **Desarrolladora** | INTEGER | null | fk_Videojuego_Desarrolladora_Compañía | |
| **Publicadora** | INTEGER | null | fk_Videojuego_Publicadora_Compañía | | 


### Clase

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre clase largo** | VARCHAR(255) | null |  | |
| **Nombre clase abreviado** | VARCHAR(255) | null |  | |
| **Descripción clase** | TINYTEXT(65535) | null |  | | 


### Compañía

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre compañía** | VARCHAR(255) | null |  | |
| **Fundación** | DATE | null |  | |
| **Contacto** | VARCHAR(255) | null |  | |
| **Dirección** | INTEGER | null | fk_Compañía_Dirección_Dirección | | 


### Ciudad

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre ciudad** | VARCHAR(255) | null |  | |
| **País** | INTEGER | null | fk_Ciudad_País_País | | 


### País

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre país** | VARCHAR(255) | null |  | |
| **Continente** | INTEGER | null | fk_País_Continente_Continente | | 


### Continente

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre continente** | VARCHAR(255) | null |  | | 


### Dirección

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Domicilio** | VARCHAR(255) | null |  | |
| **Calle** | INTEGER | null | fk_Dirección_Calle_Calle | |
| **Ver en OSM** | VARCHAR(255) | null |  | | 


### Calle

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre calle** | VARCHAR(255) | null |  | |
| **Ciudad** | INTEGER | null | fk_Calle_Ciudad_Ciudad | | 


### Videojuego-clase

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **id_juego** | INTEGER | null |  | |
| **id_clase** | INTEGER | null | fk_Videojuego-clase_id_clase_Clase | | 


### Videojuego-plataforma

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **id_juego** | INTEGER | null | fk_Videojuego-plataforma_id_juego_Videojuego | |
| **id_plataforma** | INTEGER | null | fk_Videojuego-plataforma_id_plataforma_Plataforma | | 


### Plataforma

| Name        | Type          | Settings                      | References                    | Note                           |
|-------------|---------------|-------------------------------|-------------------------------|--------------------------------|
| **id** | INTEGER | 🔑 PK, not null, unique, autoincrement |  | |
| **Nombre plataforma** | VARCHAR(255) | null |  | |
| **Lanzamiento plataforma** | DATE | null |  | |
| **Descripción plataforma** | TINYTEXT(65535) | null |  | |
| **Creadora** | INTEGER | null | fk_Plataforma_Creadora_Compañía | | 


## Relationships

- **Ciudad to País**: many_to_one
- **País to Continente**: many_to_one
- **Dirección to Calle**: many_to_one
- **Calle to Ciudad**: many_to_one
- **Videojuego to Compañía**: many_to_one
- **Videojuego to Compañía**: many_to_one
- **Compañía to Dirección**: many_to_one
- **Videojuego to Videojuego-clase**: one_to_many
- **Videojuego-clase to Clase**: many_to_one
- **Videojuego-plataforma to Videojuego**: many_to_one
- **Videojuego-plataforma to Plataforma**: many_to_one
- **Plataforma to Compañía**: many_to_one

## Database Diagram

```mermaid
erDiagram
	Ciudad }o--|| País : references
	País }o--|| Continente : references
	Dirección }o--|| Calle : references
	Calle }o--|| Ciudad : references
	Videojuego }o--|| Compañía : references
	Videojuego }o--|| Compañía : references
	Compañía }o--|| Dirección : references
	Videojuego ||--o{ Videojuego-clase : references
	Videojuego-clase }o--|| Clase : references
	Videojuego-plataforma }o--|| Videojuego : references
	Videojuego-plataforma }o--|| Plataforma : references
	Plataforma }o--|| Compañía : references

	Videojuego {
		INTEGER id
		VARCHAR(255) Nombre juego
		TINYTEXT(65535) Descripción juego
		DECIMAL Precio
		DATE Lanzamiento juego
		VARCHAR(255) Portada
		INTEGER Desarrolladora
		INTEGER Publicadora
	}

	Clase {
		INTEGER id
		VARCHAR(255) Nombre clase largo
		VARCHAR(255) Nombre clase abreviado
		TINYTEXT(65535) Descripción clase
	}

	Compañía {
		INTEGER id
		VARCHAR(255) Nombre compañía
		DATE Fundación
		VARCHAR(255) Contacto
		INTEGER Dirección
	}

	Ciudad {
		INTEGER id
		VARCHAR(255) Nombre ciudad
		INTEGER País
	}

	País {
		INTEGER id
		VARCHAR(255) Nombre país
		INTEGER Continente
	}

	Continente {
		INTEGER id
		VARCHAR(255) Nombre continente
	}

	Dirección {
		INTEGER id
		VARCHAR(255) Domicilio
		INTEGER Calle
		VARCHAR(255) Ver en OSM
	}

	Calle {
		INTEGER id
		VARCHAR(255) Nombre calle
		INTEGER Ciudad
	}

	Videojuego-clase {
		INTEGER id
		INTEGER id_juego
		INTEGER id_clase
	}

	Videojuego-plataforma {
		INTEGER id
		INTEGER id_juego
		INTEGER id_plataforma
	}

	Plataforma {
		INTEGER id
		VARCHAR(255) Nombre plataforma
		DATE Lanzamiento plataforma
		TINYTEXT(65535) Descripción plataforma
		INTEGER Creadora
	}
```