FROM openjdk:17
WORKDIR /app
COPY . .
# Kotlin нужно компилировать через gradle
CMD ["./novus/gradlew", "-p", "novus", "run"]
