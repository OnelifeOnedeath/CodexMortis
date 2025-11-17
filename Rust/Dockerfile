FROM rust:1.70
WORKDIR /app/scutum
COPY . .
RUN cargo build --release
CMD ["./target/release/scutum"]
