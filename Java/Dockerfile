FROM openjdk:17
WORKDIR /app
COPY . .
RUN javac senex/src/Main.java
CMD ["java", "-cp", "senex/src", "Main"]
