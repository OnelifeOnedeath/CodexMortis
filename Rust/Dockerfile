FROM rust:1.70
WORKDIR /app
COPY . .
RUN cd scutum && cargo build --release
CMD ["./scutum/target/release/scutum"]
