FROM openjdk:17
WORKDIR /app
COPY . .
RUN javac senex/src/main/java/com/codexmortis/senex/Senex.java
CMD ["java", "-cp", "senex/src/main/java", "com.codexmortis.senex.Senex"]
