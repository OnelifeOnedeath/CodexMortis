FROM openjdk:17-jdk-slim
WORKDIR /app
COPY . .
RUN ./gradlew build
CMD ["./gradlew", "run"]
