FROM rust:1.70
WORKDIR /app
COPY Rust/ ./
WORKDIR /app/scutum
RUN cargo build --release
CMD ["./target/release/scutum"]
