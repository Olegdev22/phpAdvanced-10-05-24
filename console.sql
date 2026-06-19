# INSERT INTO parks
# ( addres)
# VALUES
# ('Kyiv'),
# ('Khorkov'),
# ('Poltava'),
# ('Kyiv')

# INSERT INTO cars
# (park_id, model, price, data)
# VALUES
# (1, 'Ford', 9, '2000-01-01'),
# (4, 'Lada', 3, '2015-01-01'),
# (2, 'Toyota', 9, '2020-01-01'),
# (2, 'Lexus', 12, '2023-01-01'),
# (3, 'BMW', 5, '2010-01-01')

# INSERT INTO drivers
# (car_id, name, phone)
# VALUES
# (1, 'Oleh', '111-112-001'),
# (2, 'Alex', '211-112-111'),
# (3, 'Denys', '211-112-121'),
# (4, 'Ruslan', '211-112-131'),
# (5, 'Artem', '211-112-444')

# INSERT INTO customers
# (name, phone)
# VALUES
# ('Kolya', '333-000-111'),
# ('Stas', '333-109-122'),
# ('Zhenya', '499-000-222'),
# ('Tikhon', '333-000-999'),
# ('Kostya', '035-452-143')

# INSERT INTO orders
# (driver_id, custumer_id, start, finish, total)
# VALUES
# (1, 2, 'start', 'final', 20.5),
# (1, 4, 'start 2', 'final 2', 55.5),
# (2, 1, 'start 3', 'final 3', 70),
# (3, 5, 'start 4', 'final 4', 100.5),
# (4, 1, 'start 5', 'final 5', 30)

# DELETE FROM parks
# WHERE id = 5

# UPDATE parks
# SET addres = 'Lviv'
# WHERE id = 4

# UPDATE parks
# SET addres = 'Kharkiv'
# WHERE id = 2

# ALTER TABLE cars
# ADD data DATE NOT NULL

# ALTER TABLE cars
# MODIFY data TEXT

# SELECT * FROM orders
# SELECT DISTINCT(driver_id), COUNT(id)
# FROM orders
# GROUP BY driver_id

# SELECT model, price, data
# FROM cars
# WHERE park_id =2

SELECT parks.addres, c.model
FROM parks
LEFT JOIN `phpPro_10.05.24`.cars c on parks.id = c.park_id



