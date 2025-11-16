FROM openjdk:17-jdk-slim
WORKDIR /app
COPY . .
RUN javac src/main/java/com/codexmortis/senex/*.java
CMD ["java", "-cp", "src/main/java", "com.codexmortis.senex.Senex"]
