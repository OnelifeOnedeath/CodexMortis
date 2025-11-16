plugins {
    kotlin("jvm") version "1.9.0"
    application
}

group = "com.codexmortis"
version = "1.0.0"

repositories {
    mavenCentral()
}

application {
    mainClass.set("com.codexmortis.novus.NovusKt")
}

tasks.withType<org.jetbrains.kotlin.gradle.tasks.KotlinCompile> {
    kotlinOptions.jvmTarget = "11"
}
