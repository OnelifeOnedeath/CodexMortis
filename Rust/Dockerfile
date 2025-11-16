FROM rust:1.70-alpine
WORKDIR /app
COPY . .
RUN cargo build --release
CMD ["./target/release/scutum"]
