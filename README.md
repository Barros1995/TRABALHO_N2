#TRABALHO_N2
## Banco de dados
```sql
CREATE TABLE `usuarios` (
  nome` varchar(100) NOT NULL,
  cpf` varchar(11) NOT NULL,
  email` varchar(100) NOT NULL,
  telefone` int(16) NOT NULL,
  horario` time DEFAULT NULL,
  calendario` date DEFAULT NULL,
  id` int(11) NOT NULL,
  PRIMARY KEY ('id')

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```
