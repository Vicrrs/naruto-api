# Naruto API - Documentação

API RESTful desenvolvida com Laravel para gerenciar entidades relacionadas ao universo de Naruto.

## Entidades

1. **Personagens**
2. **Jutsus**
3. **Clãs**
4. **Missões**

---

## 1. Personagens

### 1.1. Listar todos os personagens

`GET /api/characters`

#### Resposta

```json
[
    {
        "id": 1,
        "name": "Naruto Uzumaki",
        "description": "...",
        "village": "Konohagakure",
        "clan_id": 2
    },
    ...
]
```

### 1.2. Obter um personagem específico

`GET /api/characters/{id}`

#### Resposta

```json
{
    "id": 1,
    "name": "Naruto Uzumaki",
    "description": "...",
    "village": "Konohagakure",
    "clan_id": 2,
    "jutsus": [...]
}
```

... *(métodos adicionais de CRUD para personagens)*

---

## 2. Jutsus

### 2.1. Listar todos os jutsus

`GET /api/jutsus`

#### Resposta

```json
[
    {
        "id": 1,
        "name": "Rasengan",
        "type": "A-rank",
        "description": "..."
    },
    ...
]
```

... *(métodos adicionais de CRUD para jutsus)*

---

## 3. Clãs

### 3.1. Listar todos os clãs

`GET /api/clans`

#### Resposta

```json
[
    {
        "id": 1,
        "name": "Uchiha",
        "description": "...",
        "symbol_url": "http://example.com/uchiha.png"
    },
    ...
]
```

... *(métodos adicionais de CRUD para clãs)*

---

## 4. Missões

### 4.1. Listar todas as missões

`GET /api/missions`

#### Resposta

```json
[
    {
        "id": 1,
        "name": "Resgatar o Kazekage",
        "description": "...",
        "rank": "S"
    },
    ...
]
```

... *(métodos adicionais de CRUD para missões)*

---

### Notas

Esta é a documentação da API, focada nos métodos de listagem. No mundo real, você também incluiria detalhes sobre os métodos de `POST`, `PUT`, `DELETE`, autenticação, códigos de status HTTP, detalhes de erro e muito mais.

---

- **Personagens (characters)**
  - ID
  - Nome
  - Descrição
  - Aldeia
  - Clã (Relação com Clãs)
  - **Jutsus (Relação Muitos para Muitos com Jutsus)**
    - Jutsu 1
    - Jutsu 2
    - ...
  
- **Jutsus (jutsus)**
  - ID
  - Nome
  - Tipo
  - Descrição
  - **Personagens (Relação Muitos para Muitos com Personagens)**
    - Personagem 1
    - Personagem 2
    - ...
  
- **Clãs (clans)**
  - ID
  - Nome
  - Descrição
  - Símbolo (URL)
  - **Personagens (Relação Um para Muitos com Personagens)**
    - Personagem 1
    - Personagem 2
    - ...

- **Missões (missions)**
  - ID
  - Nome
  - Descrição
  - Rank (D, C, B, A, S)

