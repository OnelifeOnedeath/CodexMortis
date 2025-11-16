#!/bin/bash

echo "🏛️  ЗАПУСК CODEX MORTIS..."
echo "📜 Unus Vita, Unus Mors, Decem Linguae"

# Проверка Docker
docker --version
docker-compose --version

# Запуск всей системы
docker-compose up --build

echo "⚡ CODE X MORTIS - SYSTEM ONLINE!"
