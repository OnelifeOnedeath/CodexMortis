FROM openjdk:17
WORKDIR /app
COPY . .
RUN javac senex/src/main/java/com/codexmortis/senex/Senex.java senex/src/main/java/com/codexmortis/senex/core/ChaosOrchestrator.java
CMD ["java", "-cp", "senex/src/main/java", "com.codexmortis.senex.Senex"]
